jest.mock('fs');

const fs = require('fs');

const { getPhotos, getFeaturedPhotos } = require('./photography');

beforeEach(() => {
  fs.readFileSync.mockImplementation(() => `
    - title: foo
      featured: false
      order: 4
    - title: bar
      featured: true
      order: 2
    - title: hello
      featured: false
      order: 1
    - title: world
      featured: true
      order: 3
  `);
});

afterEach(() => {
  jest.clearAllMocks();
});

describe('getPhotos', () => {
  it('gets photos', () => {
    const results = getPhotos();

    expect(fs.readFileSync).toHaveBeenCalledTimes(1);
    expect(fs.readFileSync).toHaveBeenCalledWith('./src/data/photography.yaml', 'utf-8');

    expect(results).toStrictEqual([
      { title: 'hello', featured: false, order: 1 },
      { title: 'bar', featured: true, order: 2 },
      { title: 'world', featured: true, order: 3 },
      { title: 'foo', featured: false, order: 4 },
    ]);
  });
});

describe('getFeaturedPhotos', () => {
  it('gets featured photos', () => {
    const results = getFeaturedPhotos();

    expect(fs.readFileSync).toHaveBeenCalledTimes(1);
    expect(fs.readFileSync).toHaveBeenCalledWith('./src/data/photography.yaml', 'utf-8');

    expect(results).toStrictEqual([
      { title: 'bar', featured: true, order: 2 },
      { title: 'world', featured: true, order: 3 },
    ]);
  });
});
